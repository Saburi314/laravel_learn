FROM mysql:8.0

ENV MYSQL_DATABASE=learn_db \
  MYSQL_USER=learn_user \
  MYSQL_PASSWORD=learn_pass \
  MYSQL_ROOT_PASSWORD=learn_root_pass \
  TZ=Asia/Tokyo

COPY ./my.cnf /etc/mysql/conf.d/my.cnf
RUN chmod 644 /etc/mysql/conf.d/my.cnf