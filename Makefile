
COMPOSER_HASH := $(shell curl -sS https://composer.github.io/installer.sig)
COMPOSER_SETUP_FILE := /tmp/composer-setup.php
COMPOSER_PATH := /usr/local/bin/composer
NALA_PATH := /usr/bin/nala
all:

serve:
	php -S localhost:8080 -t public/


setup-env: $(NALA_PATH) $(COMPOSER_PATH) $(COMPOSER_SETUP_FILE) 

ifneq ($(shell id -u), 0)
	@echo "This script should be run as root"
	@echo "Trying run as root..."
	@sudo make $@
else
	@nala update
	@nala install --no-install-recommends php8.1 -y
	
	@php -v

	@nala install -y php8.1-cli php8.1-common php8.1-mysql php8.1-zip php8.1-gd php8.1-mbstring php8.1-curl php8.1-xml php8.1-bcmath

endif

$(NALA_PATH):
	@apt install nala -y
	
$(COMPOSER_PATH): $(COMPOSER_SETUP_FILE)
	@echo "Installing composer"

	@php -r "if (hash_file('SHA384', '$(COMPOSER_SETUP_FILE)') === '$(COMPOSER_HASH)') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
	@php $(COMPOSER_SETUP_FILE) --install-dir=/usr/local/bin --filename=composer

	@echo "Composer installed"
	
$(COMPOSER_SETUP_FILE):
	@echo "Downloading composer's setup file"
	@curl -sS https://getcomposer.org/installer -o $@
	
	@echo "Verification hash is $(COMPOSER_HASH)"
