FROM gitpod/workspace-full
SHELL ["/bin/bash", "-c"]

# Install required libraries for Projector + PhpStorm
RUN sudo apt-get -qq update
RUN sudo apt-get -qq install -y python3 python3-pip+

# Install ddev
RUN brew update && brew install lando && brew install nvm && mkcert -install

###
### Initiate a rebuild of Gitpod's image by updating this comment #1
###