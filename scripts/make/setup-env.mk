COMPOSER_HASH := $(shell curl -sS https://composer.github.io/installer.sig)
COMPOSER_SETUP_FILE := /tmp/composer-setup.php
COMPOSER_PATH := /usr/local/bin/composer
NALA_PATH := /usr/bin/nala
PHP_PATH := /usr/bin/php
MYSQL_SERVER_PATH := /usr/bin/mysql
MYSQL_SERVICE_FILE_PATH := /etc/systemd/system/multi-user.target.wants/mysql.service

PHONY += setup-env

ifneq ($(shell id -u), 0)
setup-env:
	@echo "This script should be run as root"
else
setup-env: $(PHP_PATH) $(COMPOSER_PATH) $(MYSQL_SERVICE_FILE_PATH)
	# install setup mysql 
	@mysql_secure_installation
endif

$(PHP_PATH): $(NALA_PATH)
	@nala update
	# install php
	@nala install -y --no-install-recommends php8.1
	# install php modules 
	@nala install -y php8.1-cli php8.1-common php8.1-mysql php8.1-zip php8.1-gd php8.1-mbstring php8.1-curl php8.1-xml php8.1-bcmath

$(MYSQL_SERVICE_FILE_PATH): $(MYSQL_SERVER_PATH)
	@echo "Enabling MYSQL server service"
	@systemctl enable --now mysql.service

$(MYSQL_SERVER_PATH):
	@echo "Installing MYSQL"
	@nala update
	@nala install -y mysql-server

$(NALA_PATH):
	@apt install nala -y
	
$(COMPOSER_PATH): $(COMPOSER_SETUP_FILE)
	@echo "Checking composer installation"

	@php -r "if (hash_file('SHA384', '$(COMPOSER_SETUP_FILE)') === '$(COMPOSER_HASH)') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
	@php $(COMPOSER_SETUP_FILE) --install-dir=/usr/local/bin --filename=composer

	@echo "Composer installed"
	
$(COMPOSER_SETUP_FILE):
	@echo "Downloading composer's setup file"
	@curl -sS https://getcomposer.org/installer -o $@
	
	@echo "Verification hash is $(COMPOSER_HASH)"
