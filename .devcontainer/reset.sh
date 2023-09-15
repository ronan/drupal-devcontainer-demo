#!/bin/sh
set -e

cd /workspace

echo "Initializing Drupal Dev Container Demo."
echo "🗑️  Deleting files ..."
rm -rf data
mkdir -p data/logs

echo "🗃️  Dropping database ..."
echo 'DROP DATABASE IF EXISTS drupal10' | mariadb -h db --password=root

echo "💧 Installing a fresh Drupal ..."
cd drupal
# rm -rf vendor composer.lock
cp -f /workspace/src/composer.json /workspace/drupal/composer.json
composer install

echo "📝 Overwriting settings ..."
cp -f /workspace/.devcontainer/settings.php /workspace/drupal/web/sites/default/settings.php

echo "📁 Adding custom code directories ..."
ln -fs /workspace/src/modules /workspace/drupal/web/sites/default/modules
ln -fs /workspace/src/themes /workspace/drupal/web/sites/default/themes

cat << EOF


👉 http://localhost:8001 👈


EOF