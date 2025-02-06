# Use an official PHP image
FROM php:8.3-cli

# Set the working directory inside the container
WORKDIR /app

# Copy all project files to the container
COPY . .

# Expose port 8080 (Render uses this by default)
EXPOSE 8080

# Start the PHP built-in server
CMD ["php", "-S", "0.0.0.0:8080", "-t", "api/classify-number"]
