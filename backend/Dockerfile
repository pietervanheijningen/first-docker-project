FROM node:13.12.0
WORKDIR /home/node/app

COPY . /home/node/app
RUN npm install
RUN npm install -g nodemon

EXPOSE 80
CMD nodemon app.js
