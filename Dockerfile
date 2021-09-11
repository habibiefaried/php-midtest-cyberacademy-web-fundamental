FROM php:7.2-apache

COPY . /var/www/html

ARG PROOFTXT
ENV PROOFTXT $PROOFTXT
RUN echo "$PROOFTXT" > /var/www/proof.txt 2>/dev/null

