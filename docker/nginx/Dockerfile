FROM nginx:1.17-alpine

# Use dl-2, as the main repo is down (15.04.2020)
RUN sed -i -e 's/dl-cdn/dl-2/' /etc/apk/repositories && \
    apk --no-cache add \
    tzdata

WORKDIR /var/www/app