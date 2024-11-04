# Headless WordPress with React

The idea for this came from a project where the users had to use WordPress for the backend but with React on the frontend. The good thing is the backend can be swapped for any other backend tech (i.e. Node.js, Laravel, Storyblok, Contentful, etc.). __Lots of improvements to be made when I have time.__

## Sources

https://reactjs.org/docs/create-a-new-react-app.html  
https://tailwindcss.com/docs/guides/create-react-app

## Running the project locally
You can use [Lando](https://docs.lando.dev/getting-started/installation.html) to run WordPress  
or you can set it up however you like and just add the URL to `frontend/.env`

1. Copy `frontend/.env.example` --> `frontend/.env` and add the correct info
2. Copy `api/.env.example` --> `api/.env` and add the correct info
3. On your local machine, from the root of the project, you can:
```
yarn start
```

OR

```
npm start
```

## Environment variables

_*All URLs are without the trailing slash_

### React
__REACT_APP_PUBLIC_URL__: The main site/home URL (dev or production)  
__REACT_APP_API_URL__: The WordPress main REST API URL (i.e. `<home_url>/api/wp-json/v1`)  

### WordPress
__APP_ENV__: The app environment  
__DB_NAME__: WordPress database name  
__DB_USER__: WordPress database user name  
__DB_PASSWORD__: WordPress database password  
__DB_HOST__: WordPress database host (usually `localhost`)  
__WP_REACT_URL__: The main site/home URL (dev or production)  

## Production Build

Navigate to the project root and run (this can also be automated with your CI/CD pipeline):
```
yarn build
```

## Compiling Styles
### The site uses Tailwind CSS
[Tailwind Installation](https://tailwindcss.com/docs/installation)

_Since the theme uses Tailwind CSS there's no need to use any CSS Preprocessors (i.e. Sass, Less) (based on [Tailwind's recommendation](https://tailwindcss.com/docs/using-with-preprocessors))_.
