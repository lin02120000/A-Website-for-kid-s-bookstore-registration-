-- Database: `xbook`
--
CREATE DATABASE IF NOT EXISTS `xbook` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `xbook`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `phonenumber` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `email`, `password`, `phonenumber`) VALUES
(1, 'abc', 'a@g.com', 'Aa123456', '1234567890'),
(2, 'Abdel', 'abdel@gamil.com', '123456Ab', '1234567890'),
(3, 'Michael', 'michael@hotmail.com', '123456Ab', '6470000000'),
(4, 'Olina', 'olina@gmail.com', '123456Ab', '6135222222'),
(5, 'Ryan', 'ryanryan@hotmail.com', '123456Ab', '4161111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

