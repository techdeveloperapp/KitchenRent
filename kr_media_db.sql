--
-- Table structure for table `kr_media`
--

CREATE TABLE `kr_media` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `mime_type` varchar(50) NOT NULL,
  `file_path` varchar(100) NOT NULL,
  `file_size` int(11) NOT NULL COMMENT 'in bytes',
  `added_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kr_media`
--
ALTER TABLE `kr_media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kr_media`
--
ALTER TABLE `kr_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;