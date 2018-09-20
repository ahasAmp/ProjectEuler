list: 					# Lists all available commands, the default command when running `make` with no arguments
	grep -v -e "^\t" Makefile | grep . | awk -F":.+?#" '{ print $$1 " #" $$2 }' | column -t -s '#'

install:
	composer install --no-interaction --prefer-source;

osx-link-php: # Re-link PHP for this project
	@echo "\033[92mUnlink brew managed php versions\033[0m";
	php-unlinker.sh
	@echo "\033[92mBuild and link dependencies\033[0m";
	brew bundle
	brew link --force --overwrite $(shell grep -Eo 'amp-php.{0,4}' Brewfile | head -1) | head -1

osx-switch: # Run when switching between previously installed instances
	make osx-link-php
	@echo "\033[92mYou can now navigate to https://hasan-local.ampdev.co\033[0m";
	
osx-local:	# Set up your OSX machine for development at https://hasan-local.ampdev.co
	@echo "\033[92mRequest sudo privileges\033[0m";
	sudo true;
	make osx-link-php;