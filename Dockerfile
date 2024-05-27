# Use the official Nginx image as the base image
FROM nginx:alpine

# Set the working directory inside the container
WORKDIR /Project

# Copy the content of the portfolio website to the working directory
COPY . /Project

# Copy the Nginx configuration file
COPY nginx.conf /etc/nginx/nginx.conf

# Expose port 80 to access the website
EXPOSE 80

# Start Nginx server
CMD ["nginx", "-g", "daemon off;"]
