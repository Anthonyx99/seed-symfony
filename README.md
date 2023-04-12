# seed-symfony

## Pensez à mettre à jour le .env pour personnaliser les variables suivantes : 

APP_SEED_NAME

APP_SEED_DOMAINE

APP_SEED_HOST

Si vous changez APP_SEED_NAME, il faut alors vous rendre dans config/nginx/conf.d/app.conf pour mettre à jours php-upstream avec "app-APP_SEED_NAME:9000" en remplaçant APP_SEED_NAME par votre nouveau nom d'app