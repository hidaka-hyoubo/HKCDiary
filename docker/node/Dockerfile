FROM node:20

WORKDIR /var/www
# 1. 依存だけを先にコピーしてnpm install
COPY package*.json ./
RUN npm install
# 2. 他のファイルを後からコピー
COPY . .
CMD ["npm", "run", "dev"]