<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Media;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setPath('http://cp.lakanal.free.fr/exercices/jeux/memory/legumes/legumes.png');
        $media1->setAlt('Légumes');
        $manager->persist($media1);
        
        $media2 = new Media();
        $media2->setPath('http://img0.mxstatic.com/wallpapers/238cdfc903a19ad39ea901619dd55d47_large.jpeg');
        $media2->setAlt('Fruits');
        $manager->persist($media2);

        $media3 = new Media();
        $media3->setPath('https://thumbs.dreamstime.com/b/poivre-rouge-de-paprika-d-%C3%A9pice-48587418.jpg');
        $media3->setAlt('Poivron rouge');
        $manager->persist($media3);   
            
        $media4 = new Media();
        $media4->setPath('http://www.princedebretagne-pro.com/medias/5114fcd91ae7e.JPG');
        $media4->setAlt('Piment');
        $manager->persist($media4);              
        
        $media5 = new Media();
        $media5->setPath('http://www.niffylux.com/image-gratuite/Tomate__7_4b71e7e13f85b.jpg');
        $media5->setAlt('Tomate');
        $manager->persist($media5);
        
        $media6 = new Media();
        $media6->setPath('https://az836796.vo.msecnd.net/media/image/product/fr/large/0000000094065.jpg');
        $media6->setAlt('Poivron vert');
        $manager->persist($media6);
        
        $media7 = new Media();
        $media7->setPath('http://www.boitearecettes.com/fruits_legumes/raisins-6.gif');
        $media7->setAlt('Raisin');
        $manager->persist($media7);
        
        $media8 = new Media();
        $media8->setPath('https://www.espaceagro.com/_AFFAIRE/291081.jpg');
        $media8->setAlt('Orange');
        $manager->persist($media8);

        $media9 = new Media();
        $media9->setPath('https://cdn.shopify.com/s/files/1/0665/4989/products/banane.png?v=1458596631');
        $media9->setAlt('Banane');
        $manager->persist($media9);

        $media10 = new Media();
        $media10->setPath('https://www.zespri.eu/_img/kiwi/kiwi-green.png');
        $media10->setAlt('Kiwi');
        $manager->persist($media10);

        $media11 = new Media();
        $media11->setPath('https://www.corsicavap.com/901-thickbox_default/fraises-nouvelle.jpg');
        $media11->setAlt('Fraise');
        $manager->persist($media11);
        
        $manager->flush();
        
        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);        
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7);        
        $this->addReference('media8', $media8);
        $this->addReference('media9', $media9);
        $this->addReference('media10', $media10);
        $this->addReference('media11', $media11);
    }
    
    public function getOrder()
    {
        return 1;
    }
}