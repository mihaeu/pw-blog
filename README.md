# Blog Exercise

## Getting started

Make sure you have PHP 7 installed and global composer:

```bash
git clone https://github.com/mihaeu/pw-blog
cd pw-blog
composer install
```

## Tests

```bash
vendor/bin/phpunit --testdox
PHPUnit 5.0.9 by Sebastian Bergmann and contributors.

Mihaeu\Blog\ArticleCollection
 [x] Adds new articles

Mihaeu\Blog\Article
 [x] Reads headline
 [x] Add tags to article

Mihaeu\Blog\BlogRenderer
 [x] Renders an article
 [x] Renders many articles

Mihaeu\Blog\Blog
 [x] Normal user can not publish
 [x] Owner can publish
 [x] Author can publish

Mihaeu\Blog\Console
 [x] Writes to standard out

Mihaeu\Blog\Email
 [x] Accepts valid email
 [x] Does not accept invalid email

Mihaeu\Blog\TagCollection
 [x] Adds new tags to collection

Mihaeu\Blog\Tag
 [x] Reads tag

Mihaeu\Blog\User
 [x] Can publish with permission
 [x] Can not publish by default
```