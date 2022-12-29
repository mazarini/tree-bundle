
#*************************************************************************#
#                            G E N E R I Q U E                            #
#*************************************************************************#

install: composer-install yarn-install

validate: php-cs-fixer phpstan twig-validate phpmd test composer-validate

update: composer-update yarn-update

#*************************************************************************#
#                                 T W I G                                 #
#*************************************************************************#

twig-validate: twig-lint twigcs

twigcs:
	twigcs

twig-lint:
	bin/console lint:twig

#*************************************************************************#
#                         P H P - C S - F I X E R                         #
#*************************************************************************#

cs: php-cs-fixer

phpcs: php-cs-fixer

php-cs-fixer:
	php-cs-fixer fix

#*************************************************************************#
#                              P H P S T A N                              #
#*************************************************************************#

stan: phpstan

phpstan:
	phpstan -vvv
	phpstan -vvv --configuration=.demo/phpstan.neon.dist

#*************************************************************************#
#                                P H P M D                                #
#*************************************************************************#

md: phpmd

phpmd:
	phpmd src,tests,.demo/src,.demo/tests text rulesets.xml

#*************************************************************************#
#                              P H P U N I T                              #
#*************************************************************************#

cover: cover-text
test: phpunit

phpunit:
	bin/phpunit --cache-result-file var/cache/phpunit.result.cache
	bin/phpunit --cache-result-file .demo/var/cache/phpunit.result.cache --config .demo/phpunit.xml.dist

cover-html:
	XDEBUG_MODE=coverage bin/phpunit --cache-result-file var/cache/phpunit.result.cache --coverage-html var/cover

cover-text:
	XDEBUG_MODE=coverage bin/phpunit --cache-result-file var/cache/phpunit.result.cache --coverage-text


#*************************************************************************#
#                               P H P D O C                               #
#*************************************************************************#

doc: phpDocumentor
phpdoc: phpDocumentor

phpDocumentor:
	phpDocumentor

#*************************************************************************#
#                             C O M P O S E R                             #
#*************************************************************************#

composer-validate:
	composer validate --strict

composer-update:
	composer global update
	composer update

composer-install:
	composer self-update
	composer install

#*************************************************************************#
#                                 Y A R N                                 #
#*************************************************************************#

yarn-install:
	yarnpkg install
	yarnpkg dev

yarn-update:
	yarnpkg upgrade
