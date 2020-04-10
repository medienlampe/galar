# Galar
Lumen based backend for Fjalar app.

## Getting started
### Generate local TLS certs
```
cd docker
openssl req -subj '/CN=localhost' -x509 -newkey rsa:4096 -nodes -keyout tls/key.pem -out tls/cert.pem -days 365
cd ..
```

### Build containers
Build and start the containers with `docker-compose up`.

If you want to force containers to be rebuild, use `--build` parameter: `docker-compose up --build`.

If you want to run the container in the background, use `-d` parameter: `docker-compose up -d`.
