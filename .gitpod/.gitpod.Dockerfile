FROM gitpod/workspace-full
SHELL ["/bin/bash", "-c"]

# Install required libraries for Projector + PhpStorm
RUN sudo apt-get -qq update
RUN sudo apt-get -qq install -y python3 python3-pip+

# Install ddev
RUN brew update
RUN brew install nvm
RUN brew install --cask lando
RUN mkcert -install

###
### Initiate a rebuild of Gitpod's image by updating this comment #1
###