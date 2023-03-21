CREATE TABLE `parcial2` (
  `ID` int(11) NOT NULL,
  `N` float NOT NULL,
  `Factorial` float NOT NULL,
  `Sumatoria` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



ALTER TABLE `parcial2`
  ADD PRIMARY KEY (`ID`);



ALTER TABLE `parcial2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;






/*insertar parametros*/
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar`(IN `N` FLOAT, IN `Factorial` FLOAT, IN `Sumatoria` FLOAT)
BEGIN
INSERT INTO `parcial2` (`N`, `factorial`, `sumatoria`) VALUES (N, Factorial, Sumatoria);

END$$
DELIMITER ;


