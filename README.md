# Running the Service

- Run `docker-compose up`
- Navigate to [127.0.0.1](http://127.0.0.1)
- Create your PHP scripts and files in app/public.

# deployment

When you make your website live, you'll just upload the entire project, including `docker-compose.yml`, `nginx.conf` and `PHP.Dockerfile`, run `docker-compose up -d` on the server (the `-d` flag runs it as service in the background)
