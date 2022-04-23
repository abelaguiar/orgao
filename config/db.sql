CREATE DATABASE orgao;

USE orgao;

CREATE TABLE `empresas` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `usuarios` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO usuarios (nome, email, senha) 
VALUES ('Admin', 'admin@admin.com', '$2y$10$RSN323VVTLsHcCKtFE/YyuKwj.4dzxkk/CN5DenTvE5bbDCbqgmRq');
#senha password