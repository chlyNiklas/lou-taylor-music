FROM node:latest AS  build

WORKDIR /app
COPY . .
RUN npm install
RUN npm run build

FROM nginx:latest AS deploy-static

WORKDIR /usr/share/nginx/html
RUN rm -rf ./*
COPY --from=build /app/build .
ENTRYPOINT ["nginx", "-g", "daemon off;"]

