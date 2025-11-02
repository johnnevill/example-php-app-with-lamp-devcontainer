# Devcontainer Setup for PHP and MySQL

Welcome to the `.devcontainer` directory! This folder contains the configuration files needed to set up a development environment using Visual Studio Code's Dev Containers feature. This setup is designed for PHP and MySQL development.

## What is a Dev Container?

A Dev Container allows you to develop inside a Docker container, ensuring a consistent environment for your project. This is especially useful when working with PHP and MySQL, as it eliminates the need to install these tools directly on your machine.

## Files in This Directory

### 1. `devcontainer.json`
This is the main configuration file for the Dev Container. It defines the environment, including the Docker image to use, extensions to install, and settings for the development environment.

Key sections:
- **`image`**: Specifies the Docker image (e.g., a PHP image with MySQL support).
- **`extensions`**: Lists the VS Code extensions to install automatically (e.g., PHP Debug, MySQL).
- **`settings`**: Contains editor settings like formatting rules.

To add a new VS Code extension:
1. Open `devcontainer.json`.
2. Add the extension's identifier to the `extensions` array. For example:
    ```json
    "extensions": [
         "felixfbecker.php-debug",
         "ms-mysql.mysql"
    ]
    ```

### 2. `Dockerfile` (optional)
If present, this file customizes the Docker image used by the Dev Container. You can use it to install additional tools or PHP extensions.

To add a new PHP extension:
1. Open the `Dockerfile`.
2. Add a command to install the extension. For example:
    ```dockerfile
    RUN docker-php-ext-install pdo_mysql
    ```

### 3. `docker-compose.yml` (optional)
This file defines services for your development environment, such as a MySQL database. It allows you to run multiple containers (e.g., one for PHP and another for MySQL).

Key sections:
- **`services`**: Lists the containers (e.g., `php` and `mysql`).
- **`volumes`**: Maps files from your local machine to the container.

To modify the MySQL configuration:
1. Open `docker-compose.yml`.
2. Update the `environment` section under the `mysql` service. For example:
    ```yaml
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: my_database
    ```

## How to Use This Setup

1. Open this project in VS Code.
2. Install the "Dev Containers" extension if you haven't already.
3. When prompted, reopen the project in the container.
4. VS Code will build the container and set up the environment automatically.

## Troubleshooting

- **Container fails to build**: Check the `devcontainer.json` and `Dockerfile` for syntax errors.
- **Missing PHP extensions**: Ensure they are installed in the `Dockerfile`.
- **Database connection issues**: Verify the `docker-compose.yml` configuration.

Feel free to customize this setup to fit your project's needs. 