<?php

error_reporting(E_ALL | E_NOTICE);
ini_set('display_errors', '1');

use App\Entity\Category;
use App\Entity\Post;
use App\Entity\Tag;
use Symfony\Component\Dotenv\Dotenv;

require_once __DIR__ . '/vendor/autoload.php';

(new Dotenv())->load(__DIR__ . '/.env');

$pdo         = new PDO($_ENV['DATABASE_URL']);
$fakeContent = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l' .
    'abore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum' .
    '. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet' .
    ', consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, ' .
    'sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea t' .
    'akimata sanctus est Lorem ipsum dolor sit amet.';

$category1 = new Category();
$category1::connectToDb($pdo);
$category1->setName('Category 1')->setCreatedAt(new DateTime())->setUpdatedAt(new DateTime())->save();

$category2 = new Category();
$category2::connectToDb($pdo);
$category2->setName('Category 2')->setCreatedAt(new DateTime())->setUpdatedAt(new DateTime())->save();

$category3 = new Category();
$category3::connectToDb($pdo);
$category3->setName('Category 3')->setCreatedAt(new DateTime())->setUpdatedAt(new DateTime())->save();

$tag1 = new Tag();
$tag1::connectToDb($pdo);
$tag1->setName('Foo')->setCreatedAt(new DateTime())->setUpdatedAt(new DateTime())->save();

$tag2 = new Tag();
$tag2::connectToDb($pdo);
$tag2->setName('Bar')->setCreatedAt(new DateTime())->setUpdatedAt(new DateTime())->save();

$tag3 = new Tag();
$tag3::connectToDb($pdo);
$tag3->setName('Baz')->setCreatedAt(new DateTime())->setUpdatedAt(new DateTime())->save();

$tag4 = new Tag();
$tag4::connectToDb($pdo);
$tag4->setName('Fizz')->setCreatedAt(new DateTime())->setUpdatedAt(new DateTime())->save();

$tag5 = new Tag();
$tag5::connectToDb($pdo);
$tag5->setName('Buzz')->setCreatedAt(new DateTime())->setUpdatedAt(new DateTime())->save();

$tag6 = new Tag();
$tag6::connectToDb($pdo);
$tag6->setName('FizzBuzz')->setCreatedAt(new DateTime())->setUpdatedAt(new DateTime())->save();

$tag7 = new Tag();
$tag7::connectToDb($pdo);
$tag7->setName('Hello world')->setCreatedAt(new DateTime())->setUpdatedAt(new DateTime())->save();

$post1 = new Post();
$post1::connectToDb($pdo);
$post1->setTitle('My first blog post')->setContent($fakeContent)->setCategoryId($category1->getId())->setCreatedAt(new DateTime())->setUpdatedAt(new DateTime())->save();

$post2 = new Post();
$post2::connectToDb($pdo);
$post2->setTitle('Welcome to my new blog')->setContent($fakeContent)->setCategoryId($category2->getId())->setCreatedAt(new DateTime())->setUpdatedAt(new DateTime())->save();

$post3 = new Post();
$post3::connectToDb($pdo);
$post3->setTitle('Another blog post')->setContent($fakeContent)->setCategoryId($category2->getId())->setCreatedAt(new DateTime())->setUpdatedAt(new DateTime())->save();