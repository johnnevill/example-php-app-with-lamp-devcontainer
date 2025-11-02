# Project README

Welcome to the project! This guide will help you set up your local development environment using PHP, MySQL, and a DevContainer (powered by Docker). By the end of this guide, you'll have the website running on your localhost.

---

## Prerequisites

Before you begin, ensure you have the following installed on your machine:

1. **Docker**: [Install Docker](https://docs.docker.com/get-docker/)
2. **Visual Studio Code (VS Code)**: [Download VS Code](https://code.visualstudio.com/)
3. **Dev Containers Extension for VS Code**: [Install Dev Containers Extension](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers)

---

## Getting Started

### 1. Clone the Repository
```bash
git clone <repository-url>
cd <repository-folder>
```

### 2. Open in VS Code
Open the project folder in VS Code:
```bash
code .
```

### 3. Open the DevContainer
1. When prompted by VS Code, click **Reopen in Container**.
2. If not prompted, open the Command Palette (`Ctrl+Shift+P` or `Cmd+Shift+P` on macOS) and select:
    ```
    Dev Containers: Reopen in Container
    ```

This will build the development container and install all necessary dependencies.

---

## Running the Website

### 1. Access the Website
Open your browser and navigate to:
```
http://localhost:8080
```

---

## Database Setup

### 1. MySQL Database
The DevContainer includes a MySQL database. Use the following credentials to connect:

- **Host**: `localhost`
- **Port**: `3306`
- **Username**: `root`
- **Password**: `password`
- **Database**: `example_db`

### 2. Import the Database
If a database dump is provided (e.g., `database.sql`), import it using the following command in your vscode terminal:
```bash
mysql -u root -p example_db < database.sql
```

---

## File Structure

- `public/`: Contains the website's public files (e.g., `index.php`).
- `src/`: Contains the PHP source code.
- `database/`: Contains database-related files (e.g., migrations, seeds).
- `Dockerfile` & `.devcontainer/`: Configuration for the DevContainer.

---

## Troubleshooting

1. **DevContainer Fails to Build**:
    - Ensure Docker is running.
    - Check for errors in the `Dockerfile` or `.devcontainer/devcontainer.json`.

2. **Cannot Access MySQL**:
    - Verify the credentials in the `.env` file match the ones provided above.

3. **Website Not Loading**:
    - Ensure the PHP server is running on port `8080`.

---

## Next Steps

Once your environment is set up, explore the codebase and start making changes! If you have any questions, refer to the documentation or reach out to the project maintainers.

Happy coding!