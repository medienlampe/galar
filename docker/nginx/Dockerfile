FROM nginx:stable-alpine as galar-api-nginx-prod

ADD ./docker/nginx/galar.conf /etc/nginx/conf.d/default.conf
CMD ["nginx", "-g", "daemon off;"]

EXPOSE 443

### Fallback for no target
FROM galar-api-nginx-prod
