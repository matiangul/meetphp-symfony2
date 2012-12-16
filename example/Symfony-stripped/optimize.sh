#!/bin/bash

# Script that optimizes a Symfony2 standard distribution for raw performance benchmarks

# Get the Symfony2 standard edition
mkdir benchmark
cd benchmark
git clone http://github.com/symfony/symfony-standard.git .

# Remove unneeded vendor specific code
cat > app/autoload.php <<EOF
<?php

use Symfony\Component\ClassLoader\UniversalClassLoader;

\$loader = new UniversalClassLoader();
\$loader->registerNamespaces(array(
    'Symfony' => __DIR__.'/../vendor/symfony/src',
    'Acme'    => __DIR__.'/../src',
));
\$loader->register();
EOF

# Remove unneeded vendor bundles
cat > app/AppKernel.php <<EOF
<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        return array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Acme\HelloBundle\AcmeHelloBundle(),
        );
    }

    public function registerContainerConfiguration(LoaderInterface \$loader)
    {
        \$loader->load(__DIR__.'/config/config.yml');
    }

    public function getRootDir()
    {
        return __DIR__;
    }
}
EOF

# Optimize the configuration
cat > app/config/config.yml <<EOF
framework:
    router:     { resource: "%kernel.root_dir%/config/routing.yml" }
    templating: { engines: ['php'] }
    secret:     foobar
    translator: { enabled: false }
EOF

# Add a route for the hello controller
cat > app/config/routing.yml <<EOF
_hello:
    pattern:  /hello/world
    defaults: { _controller: AcmeHelloBundle:Hello:index }
EOF

# Create the Hello bundle directory structure
mkdir -p src/Acme/HelloBundle/Controller
mkdir -p src/Acme/HelloBundle/Resources/views

# Create the bundle class
cat > src/Acme/HelloBundle/AcmeHelloBundle.php <<EOF
<?php

namespace Acme\HelloBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeHelloBundle extends Bundle
{
}
EOF

# Create the controller
cat > src/Acme/HelloBundle/Controller/HelloController.php <<EOF
<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function indexAction()
    {
        return \$this->render('AcmeHelloBundle::index.html.php');
    }
}
EOF

# Create the template
cat > src/Acme/HelloBundle/Resources/views/index.html.php <<EOF
Hello world
EOF

# Optimize the Request
sed s/Request/ApacheRequest/ web/app.php > tmp
mv tmp web/app.php

# Remove unneeded vendors from dependencies
cat > deps <<EOF
[symfony]
    git=http://github.com/symfony/symfony.git

[SensioDistributionBundle]
    git=http://github.com/sensio/SensioDistributionBundle.git
    target=/bundles/Sensio/Bundle/DistributionBundle
EOF

# Install the dependencies:
./bin/vendors install

# Benchmark!
