FROM phusion/baseimage:noble-1.0.0

CMD ["/sbin/my_init"]

RUN apt-get update && \
    apt-get install -y software-properties-common && \
    add-apt-repository ppa:ondrej/php && \
    apt-get update && \
    apt-get install -y php8.0 git

RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
