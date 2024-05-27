FROM nginx:latest

# Update and upgrade packages
RUN apt-get update && apt-get upgrade -y

# Set the working directory
WORKDIR /Project
COPY . /Project

# Copy the custom nginx configuration file
COPY nginx.conf /etc/nginx/sites-enabled/

# Expose port 80
EXPOSE 80

# Start nginx in the foreground
CMD ["nginx", "-g", "daemon off;"]
