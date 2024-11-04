# The App uses `.env` files to manage environment variables
[https://create-react-app.dev/docs/adding-custom-environment-variables/](https://create-react-app.dev/docs/adding-custom-environment-variables/)

Files on the left have more priority than files on the right:

`npm start`: `.env.development.local`, `.env.local`, `.env.development`, `.env`

`npm run build`: `.env.production.local`, `.env.local`, `.env.production`, `.env`

`npm test`: `.env.test.local`, `.env.test`, `.env` (note `.env.local` is missing)

These variables will act as the defaults if the machine does not explicitly set them.