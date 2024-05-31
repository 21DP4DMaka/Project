create database project;
use project;

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `fueltype` varchar(255) DEFAULT NULL,
  `engine` varchar(255) DEFAULT NULL,
  `cartype` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `photo` blob,
  `gearbox` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `cars` (`id`, `brand`, `model`, `year`, `fueltype`, `engine`, `cartype`, `price`, `photo`, `gearbox`) VALUES
(17, 'Audi', 'Q7', 2022, 'Dizelis', '2.0', 'Universal', '3299', 0x6a70672e6a7067, 'Automats'),
(26, 'Audi', 'RS6', 2003, 'Diesel', '3.0', 'Sedan', NULL, 0x6f6c64322e6a7067, 'manual'),
(27, 'Audi', 'RS6', 2003, 'Diesel', '3.0', 'Sedan', NULL, 0x646f6467652e6a7067, 'manual'),
(31, 'Audi', 'RS6', 2003, 'Diesel', '3.0', 'Sedan', NULL, 0x6f6c64312e6a7067, 'manual'),
(34, 'Audi', 'RS6', 2003, 'Diesel', '3.0', 'Sedan', NULL, 0x646f6467652e6a7067, 'manual'),
(35, 'Audi', 'RS6', 2003, 'Diesel', '3.0', 'Sedan', NULL, 0x6f6c64312e6a7067, 'manual'),
(36, 'Audi', 'RS6', 2003, 'Diesel', '3.0', 'Sedan', NULL, 0x6f6c64312e6a7067, 'manual'),
(37, 'Audi', 'RS6', 2003, 'Diesel', '3.0', 'Sedan', NULL, 0x646f6467652e6a7067, 'manual'),
(38, 'Audi', 'RS6', 2003, 'Diesel', '3.0', 'Sedan', NULL, 0x6f6c64322e6a7067, 'manual'),
(39, 'Audi', 'RS6', 2003, 'Diesel', '3.0', 'Sedan', NULL, 0x6a70672e6a7067, 'manual');

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'neitralsX', '$2y$10$rFl0cscCjE1ohkzh1pdBfeczgrh0jhxDyOwSh8I9mUnrEl2Xxdsp2');

ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;