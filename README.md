# Blog Exercise

## Getting started

```bash
# make sure you have PHP 7 installed and global composer

composer install
npm install

# Grunt is used to watch for changes and automatically run tests
grunt
```

## Tests

Xdebug doesn't work with PHP 7 yet, but PHPUnit 4.8+ supports PHPDBG as well:

```bash
phpdbg -qrr vendor/bin/phpunit --testdox
```

produces:

```
Mihaeu\Blog\ArticleCollection
 [x] Adds new articles

Mihaeu\Blog\Article
 [x] Reads headline
 [x] Add tags to article

Mihaeu\Blog\BlogRenderer
 [x] Renders an article

Mihaeu\Blog\Blog
 [x] Normal user can not publish
 [x] Owner can publish

Mihaeu\Blog\Console
 [x] Writes to standard out

Mihaeu\Blog\TagCollection
 [x] Adds new tags to collection

Mihaeu\Blog\Tag
 [x] Reads tag

Mihaeu\Blog\User
 [x] Can publish with permission
 [x] Can not publish by default
```