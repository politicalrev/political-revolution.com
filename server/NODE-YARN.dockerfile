FROM node:7.4.0

RUN curl -o- -L https://yarnpkg.com/install.sh | bash
ENV PATH /root/.yarn/bin:$PATH

RUN yarn add -g bower gulp