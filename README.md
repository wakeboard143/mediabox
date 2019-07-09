# NOT Mediabox

My version of Mediabox is an all Docker Container based media aggregator stack.

Components include:

*   [Deluge torrent client (using VPN)](http://deluge-torrent.org/)
*   [Jackett Tracker API and Proxy](https://github.com/Jackett/Jackett)
*   [Lidarr Music collection manager](https://lidarr.audio/)
*   [Muximux Web based HTPC manager](https://github.com/mescon/Muximux)
*   [NetData System Monitoring](https://github.com/netdata/netdata)
*   [NZBGet Usenet Downloader](https://nzbget.net/)  
*   [Ouroboros Automatic container updater](https://github.com/pyouroboros/ouroboros)
*   [Portainer Docker Container manager](https://portainer.io/)
*   [Radarr movie library manager](https://radarr.video/)
*   [Sonarr TV library manager](https://sonarr.tv/)

## Prerequisites

*   [Ubuntu 18.04 LTS](https://www.ubuntu.com/)
*   [VPN account from Private internet Access](https://www.privateinternetaccess.com/) (Please see [binhex's Github Repo](https://github.com/binhex/arch-delugevpn) if you want to use a different VPN)
*   [Git](https://git-scm.com/)
*   [Docker](https://www.docker.com/)
*   [Docker-Compose](https://docs.docker.com/compose/)

### **PLEASE NOTE**

For simplicity's sake (eg. automatic dependency management), the method used to install these packages is Ubuntu's default package manager, [APT](https://wiki.debian.org/Apt).  There are several other methods that work just as well, if not better (especially if you don't have superuser access on your system), so use whichever method you prefer.  Continue when you've successfully installed all packages listed.

### Installation

(You'll need superuser access to run these commands successfully)

Start by updating and upgrading our current packages:

`$ sudo apt update && sudo apt full-upgrade`

Install the prerequisite packages:

`$ sudo apt install curl git bridge-utils`

**Note** - Mediabox uses Docker CE as the default Docker version - if you skip this and run with older/other Docker versions you may have issues.

1.  Uninstall old versions - It’s OK if apt and/or snap report that none of these packages are installed.  
    `$ sudo apt remove docker docker-engine docker.io containerd runc`  
    `$ sudo snap remove docker`  

2.  Install Docker CE:  
    `$ sudo apt-get install apt-transport-https ca-certificates curl gnupg-agent software-properties-common`
    `$ curl -fsSL https://get.docker.com -o get-docker.sh`
    `$ sudo sh get-docker.sh`  

3.  Install Docker-Compose:  

    ```bash
    sudo curl -L https://github.com/docker/compose/releases/download/1.24.0/docker-compose-`uname -s`-`uname -m` -o /usr/local/bin/docker-compose
    ```

4.  Set the permissions: `$ sudo chmod +x /usr/local/bin/docker-compose`  

5.  Verify the Docker Compose installation: `$ docker-compose -v`  

Add the current user to the docker group:

`$ sudo usermod -aG docker $USER`

Adjustments for the the DelugeVPN container

`$ sudo /sbin/modprobe iptable_mangle`

`$ sudo bash -c "echo iptable_mangle >> /etc/modules"`

Reboot your machine manually, or using the command line:

`$ sudo reboot`

## Using mediabox

Once the prerequisites are all taken care of you can move forward with using mediabox.

1.  Clone the mediabox repository: `$ git clone https://github.com/wakeboard143/mediabox.git`

2.  Change directory into mediabox: `$ cd mediabox/`

3.  Run the mediabox.sh script: `$ ./mediabox.sh`  (**See below for the script questions**)

4.  To upgrade Mediabox at anytime, re-run the mediabox script: `$ ./mediabox.sh`

### Please be prepared to supply the following details after you run Step 3 above

As the script runs you will be prompted for:

1.  Your Private Internet Access credentials
    *   **username**
    *   **password**

2.  The "style" of Portainer to use
    *   **auth** (will require a password, require a persistent volume map, and will need you to select the endpoint to manage)
    *   **noauth** (will not require a password for access and will automatically connect to the local Docker sock endpoint)

3.  Credentials for the NBZGet interface and the Deluge daemon which needed for the CouchPotato container.
    *   **username**
    *   **password**

Upon completion, the script will launch your mediabox containers.
