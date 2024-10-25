FROM node:18.20.4-slim
WORKDIR Display_STF/
ADD . /Display_STF/
RUN npm install
CMD npm start
