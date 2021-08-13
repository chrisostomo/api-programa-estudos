FROM php:7-alpine-cli

WORKDIR /app

COPY . /app

CMD ["php","-S", "0.0.0.0:8000", "-t", "public"]