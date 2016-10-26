# Installing the Test Application

- [Prerequisites](#prerequisites)
    - [Homestead](#homestead)
- [Installing the CMS](#installing-the-cms)
- [Installing New Relic](#installing-new-relic)

The BasicCMS content management system is, as the name may suggest, a basic
application designed to quickly get a content management system up and running
using the Laravel framework. This project can also be used to learn how to
 utilize the New Relic PHP agent with a Laravel framework, including how to 
 install the agent, how to install an app and an agent on Heroku, and how to 
 utilize the PHP Agent API. 

## Prerequisites

The BasicCMS project and New Relic PHP training install requires:

- PHP >= 5.6.4
- Git
- Composer
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- MySQL

### Homestead

Homestead is a self-contained, official, pre-packaged Vagrant box that has all 
of the prerequisites for installing the BasicCMS included in a virtual machine 
that's quick and easy to spin up and use. 
For Homestead, you need to have [Vagrant installed](https://www.vagrantup.com/downloads.html)

Once Vagrant has been installed, open your command line, create a separate 
folder for Homestead. This folder will be used to hold the virtual machine. 
Note that this folder should **not** contain the BasicCMS project that we clone 
later on. 

Within that newly created folder, you'll want to run `vagrant box add 
laravel/homestead`. This command downloads the metadata for the pre-configured 
Vagrant box for Laravel Homestead and adds it to the list of boxes that Vagrant 
can use to start a new virtual machine. 

After that process is completed, the next step would be to clone the Homestead 
repository from GitHub by running `git clone 
https://github.com/laravel/homestead.git .` This will add the Homestead 
configuration files to your recently created Homestead directory. 

Once you have cloned the Homestead repository, run the `bash init.sh` command 
from the Homestead directory to create the `Homestead.yaml` configuration file. 
The `Homestead.yaml` file will be placed in the `~/.homestead` hidden directory:

The last step of getting Homestead set up is to adjust some of the 
configuration settings found within the `~/.homestead/Homestead.yaml` file that 
was created by running the `init.sh` script. With your favorite text editor, 
open the `~/.homestead/Homestead.yaml` file, which may be hidden on your system,
 which would require you to open the file either via the terminal, or by 
viewing all hidden files and folders on your computer.

Within the `Homestead.yaml` file, the most important section is the one marked `folders`. This section defines the file structure found within the virtual machine, and how it compares to your local machines folder structure. 

By default, you should see something like this:

```
folders:
    - map: ~/Code
      to: /home/vagrant/Code
```

This indicates that the `~/Code` folder on the local machine is mapped to the `/home/vagrant/Code` folder, which is what the web server is configured to serve by default. What that means is that any files found within `~/Code` will be served by the web server. However, our BasicCMS project is not likely to be placed in the `~/Code` folder on your local machine, so it's recommended to change this value to where the BasicCMS repository will be found. For example:

```
folders:
    - map: ~/Repos/BasicCMS
      to: /home/vagrant/Code
```

Finally, for convenience, it's recommended that you add a line to your `hosts` 
file (`/etc/hosts` on OSX, `C:\Windows\System32\drivers\etc\hosts` on Windows) 
that creates an alias for the IP address that Homestead runs on:

```
192.168.10.10  homestead.app
```

This line makes it to where you can access your application through your 
browser at `homestead.app`, rather than needing to type in or remember an IP 
address each time. 

With Homestead installed, getting your virtual machine is as easy as running `vagrant up`, followed by `vagrant ssh` to access the command line of the virtual machine. 

## Installing the CMS

