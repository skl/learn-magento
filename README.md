# Magento: Following the Alan Storm Tutorials

## Quick Start

To get the VM up and running, first install bundler and the 'vagrant-librarian-chef' Vagrant plugin.

Once you have the above setup, run the following:

```
bundle install
vagrant up
```

This should provision an Ubuntu 14.04 instance for you at `192.168.123.123`, this IP address
is configurable in the `Vagrantfile`.

Next, add an entry to `/etc/hosts`:

```
192.168.123.123 magento.dev
```

Hopefully, you should be able to access the project at http://magento.dev/

## Todo

* Use Berkshelf instead of Librarian
* Use Nginx instead of Apache
