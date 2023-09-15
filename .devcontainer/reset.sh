#!/bin/sh
set -e

cd /workspace

echo "Initializing Drupal Dev Container Demo."
echo "🗑️  Deleting files ..."
rm -rf logs data
mkdir logs data

echo "🗃️  Dropping database ..."
echo 'DROP DATABASE IF EXISTS drupal10' | mariadb -h db --password=root

echo "💧 Installing a fresh Drupal ..."
cd root
rm -rf vendor composer.lock
cp -f /drupal/composer.json /workspace/root/composer.json
composer install

echo "📝 Overwriting settings ..."
cp -f /workspace/.devcontainer/settings.drupal10.php /workspace/root/web/sites/default/settings.php

echo "📝 Adding custom code directories ..."
# todo

echo "👉 http://localhost:8001 ..."
