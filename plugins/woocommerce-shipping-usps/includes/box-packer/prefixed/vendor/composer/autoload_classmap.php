<?php

namespace WC_USPS;

// autoload_classmap.php @generated by Composer
$vendorDir = \dirname(__DIR__);
$baseDir = \dirname($vendorDir);
return array('Automattic\\Jetpack\\Autoloader\\AutoloadFileWriter' => $vendorDir . '/automattic/jetpack-autoloader/src/AutoloadFileWriter.php', 'Automattic\\Jetpack\\Autoloader\\AutoloadGenerator' => $vendorDir . '/automattic/jetpack-autoloader/src/AutoloadGenerator.php', 'Automattic\\Jetpack\\Autoloader\\AutoloadProcessor' => $vendorDir . '/automattic/jetpack-autoloader/src/AutoloadProcessor.php', 'Automattic\\Jetpack\\Autoloader\\CustomAutoloaderPlugin' => $vendorDir . '/automattic/jetpack-autoloader/src/CustomAutoloaderPlugin.php', 'Automattic\\Jetpack\\Autoloader\\ManifestGenerator' => $vendorDir . '/automattic/jetpack-autoloader/src/ManifestGenerator.php', 'WC_USPS\\Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php', 'WC_USPS\\DVDoug\\BoxPacker\\Box' => $vendorDir . '/dvdoug/boxpacker/src/Box.php', 'WC_USPS\\DVDoug\\BoxPacker\\BoxList' => $vendorDir . '/dvdoug/boxpacker/src/BoxList.php', 'WC_USPS\\DVDoug\\BoxPacker\\ConstrainedItem' => $vendorDir . '/dvdoug/boxpacker/src/ConstrainedItem.php', 'WC_USPS\\DVDoug\\BoxPacker\\ConstrainedPlacementItem' => $vendorDir . '/dvdoug/boxpacker/src/ConstrainedPlacementItem.php', 'WC_USPS\\DVDoug\\BoxPacker\\InfalliblePacker' => $vendorDir . '/dvdoug/boxpacker/src/InfalliblePacker.php', 'WC_USPS\\DVDoug\\BoxPacker\\Item' => $vendorDir . '/dvdoug/boxpacker/src/Item.php', 'WC_USPS\\DVDoug\\BoxPacker\\ItemList' => $vendorDir . '/dvdoug/boxpacker/src/ItemList.php', 'WC_USPS\\DVDoug\\BoxPacker\\ItemTooLargeException' => $vendorDir . '/dvdoug/boxpacker/src/ItemTooLargeException.php', 'WC_USPS\\DVDoug\\BoxPacker\\LayerPacker' => $vendorDir . '/dvdoug/boxpacker/src/LayerPacker.php', 'WC_USPS\\DVDoug\\BoxPacker\\LayerStabiliser' => $vendorDir . '/dvdoug/boxpacker/src/LayerStabiliser.php', 'WC_USPS\\DVDoug\\BoxPacker\\LimitedSupplyBox' => $vendorDir . '/dvdoug/boxpacker/src/LimitedSupplyBox.php', 'WC_USPS\\DVDoug\\BoxPacker\\NoBoxesAvailableException' => $vendorDir . '/dvdoug/boxpacker/src/NoBoxesAvailableException.php', 'WC_USPS\\DVDoug\\BoxPacker\\OrientatedItem' => $vendorDir . '/dvdoug/boxpacker/src/OrientatedItem.php', 'WC_USPS\\DVDoug\\BoxPacker\\OrientatedItemFactory' => $vendorDir . '/dvdoug/boxpacker/src/OrientatedItemFactory.php', 'WC_USPS\\DVDoug\\BoxPacker\\OrientatedItemSorter' => $vendorDir . '/dvdoug/boxpacker/src/OrientatedItemSorter.php', 'WC_USPS\\DVDoug\\BoxPacker\\PackedBox' => $vendorDir . '/dvdoug/boxpacker/src/PackedBox.php', 'WC_USPS\\DVDoug\\BoxPacker\\PackedBoxList' => $vendorDir . '/dvdoug/boxpacker/src/PackedBoxList.php', 'WC_USPS\\DVDoug\\BoxPacker\\PackedItem' => $vendorDir . '/dvdoug/boxpacker/src/PackedItem.php', 'WC_USPS\\DVDoug\\BoxPacker\\PackedItemList' => $vendorDir . '/dvdoug/boxpacker/src/PackedItemList.php', 'WC_USPS\\DVDoug\\BoxPacker\\PackedLayer' => $vendorDir . '/dvdoug/boxpacker/src/PackedLayer.php', 'WC_USPS\\DVDoug\\BoxPacker\\Packer' => $vendorDir . '/dvdoug/boxpacker/src/Packer.php', 'WC_USPS\\DVDoug\\BoxPacker\\Test\\ConstrainedPlacementByCountTestItem' => $vendorDir . '/dvdoug/boxpacker/tests/Test/ConstrainedPlacementByCountTestItem.php', 'WC_USPS\\DVDoug\\BoxPacker\\Test\\ConstrainedPlacementNoStackingTestItem' => $vendorDir . '/dvdoug/boxpacker/tests/Test/ConstrainedPlacementNoStackingTestItem.php', 'WC_USPS\\DVDoug\\BoxPacker\\Test\\ConstrainedTestItem' => $vendorDir . '/dvdoug/boxpacker/tests/Test/ConstrainedTestItem.php', 'WC_USPS\\DVDoug\\BoxPacker\\Test\\LimitedSupplyTestBox' => $vendorDir . '/dvdoug/boxpacker/tests/Test/LimitedSupplyTestBox.php', 'WC_USPS\\DVDoug\\BoxPacker\\Test\\THPackTestItem' => $vendorDir . '/dvdoug/boxpacker/tests/Test/THPackTestItem.php', 'WC_USPS\\DVDoug\\BoxPacker\\Test\\TestBox' => $vendorDir . '/dvdoug/boxpacker/tests/Test/TestBox.php', 'WC_USPS\\DVDoug\\BoxPacker\\Test\\TestItem' => $vendorDir . '/dvdoug/boxpacker/tests/Test/TestItem.php', 'WC_USPS\\DVDoug\\BoxPacker\\VolumePacker' => $vendorDir . '/dvdoug/boxpacker/src/VolumePacker.php', 'WC_USPS\\DVDoug\\BoxPacker\\WeightRedistributor' => $vendorDir . '/dvdoug/boxpacker/src/WeightRedistributor.php', 'WC_USPS\\DVDoug\\BoxPacker\\WorkingVolume' => $vendorDir . '/dvdoug/boxpacker/src/WorkingVolume.php', 'WC_USPS\\Psr\\Log\\AbstractLogger' => $vendorDir . '/psr/log/Psr/Log/AbstractLogger.php', 'WC_USPS\\Psr\\Log\\InvalidArgumentException' => $vendorDir . '/psr/log/Psr/Log/InvalidArgumentException.php', 'WC_USPS\\Psr\\Log\\LogLevel' => $vendorDir . '/psr/log/Psr/Log/LogLevel.php', 'WC_USPS\\Psr\\Log\\LoggerAwareInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareInterface.php', 'WC_USPS\\Psr\\Log\\LoggerAwareTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareTrait.php', 'WC_USPS\\Psr\\Log\\LoggerInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerInterface.php', 'WC_USPS\\Psr\\Log\\LoggerTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerTrait.php', 'WC_USPS\\Psr\\Log\\NullLogger' => $vendorDir . '/psr/log/Psr/Log/NullLogger.php', 'WC_USPS\\Psr\\Log\\Test\\DummyTest' => $vendorDir . '/psr/log/Psr/Log/Test/DummyTest.php', 'WC_USPS\\Psr\\Log\\Test\\LoggerInterfaceTest' => $vendorDir . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php', 'WC_USPS\\Psr\\Log\\Test\\TestLogger' => $vendorDir . '/psr/log/Psr/Log/Test/TestLogger.php');
