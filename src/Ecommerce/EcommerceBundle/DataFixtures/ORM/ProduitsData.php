<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Produits;

class ProduitsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $produit1 = new Produits();
        $produit1->setCategorie($this->getReference('categorie1'));
        $produit1->setDescription("Le poivron rouge est un groupe de cultivars de l'espèce Capsicum annuum.");
        $produit1->setDisponible('1');
        $produit1->setImage($this->getReference('media3'));
        $produit1->setNom('Poivron rouge');
        $produit1->setPrix('1.99');
        $produit1->setTva($this->getReference('tva1'));
        $manager->persist($produit1);

        $produit2 = new Produits();
        $produit2->setCategorie($this->getReference('categorie1'));
        $produit2->setDescription("Piment est généralement associé à la saveur du piquant (pimenté).");
        $produit2->setDisponible('1');
        $produit2->setImage($this->getReference('media4'));
        $produit2->setNom('Piment');
        $produit2->setPrix('3.99');
        $produit2->setTva($this->getReference('tva2'));
        $manager->persist($produit2);

        $produit3 = new Produits();
        $produit3->setCategorie($this->getReference('categorie1'));
        $produit3->setDescription("La tomate est une espèce de plantes herbacées de la famille des Solanacées, originaire du nord-ouest de l'Amérique du Sud.");
        $produit3->setDisponible('1');
        $produit3->setImage($this->getReference('media5'));
        $produit3->setNom('Tomate');
        $produit3->setPrix('0.99');
        $produit3->setTva($this->getReference('tva2'));
        $manager->persist($produit3);
        
        $produit4 = new Produits();
        $produit4->setCategorie($this->getReference('categorie1'));
        $produit4->setDescription("Le poivron vert est un groupe de cultivars de l'espèce Capsicum annuum.");
        $produit4->setDisponible('1');
        $produit4->setImage($this->getReference('media6'));
        $produit4->setNom('Poivron vert');
        $produit4->setPrix('2.99');
        $produit4->setTva($this->getReference('tva2'));
        $manager->persist($produit4);
        
        $produit5 = new Produits();
        $produit5->setCategorie($this->getReference('categorie2'));
        $produit5->setDescription("Le raisin est le fruit de la Vigne. Le raisin de la vigne cultivée Vitis vinifera est un des fruits les plus cultivés au monde, avec 68 millions de tonnes produites en 2010.");
        $produit5->setDisponible('1');
        $produit5->setImage($this->getReference('media7'));
        $produit5->setNom('Raisin');
        $produit5->setPrix('0.97');
        $produit5->setTva($this->getReference('tva2'));
        $manager->persist($produit5);
        
        $produit6 = new Produits();
        $produit6->setCategorie($this->getReference('categorie2'));
        $produit6->setDescription("L’orange est un agrume, fruit des orangers, des arbres de différentes espèces de la famille des Rutacées ou d'hybrides de ceux-ci.");
        $produit6->setDisponible('1');
        $produit6->setImage($this->getReference('media8'));
        $produit6->setNom('Orange');
        $produit6->setPrix('1.20');
        $produit6->setTva($this->getReference('tva2'));
        $manager->persist($produit6);

        $produit7 = new Produits();
        $produit7->setCategorie($this->getReference('categorie2'));
        $produit7->setDescription("La banane est le fruit ou la baie dérivant de l’inflorescence du bananier. Les bananes sont des fruits très généralement stériles issus de variétés domestiquées.");
        $produit7->setDisponible('1');
        $produit7->setImage($this->getReference('media9'));
        $produit7->setNom('Banane');
        $produit7->setPrix('3.20');
        $produit7->setTva($this->getReference('tva2'));
        $manager->persist($produit7);

        $produit8 = new Produits();
        $produit8->setCategorie($this->getReference('categorie2'));
        $produit8->setDescription("Les kiwis sont des fruits de plusieurs espèces de lianes du genre Actinidia, famille des Actinidiaceae.");
        $produit8->setDisponible('1');
        $produit8->setImage($this->getReference('media10'));
        $produit8->setNom('Kiwi');
        $produit8->setPrix('4.25');
        $produit8->setTva($this->getReference('tva2'));
        $manager->persist($produit8);

        $produit9 = new Produits();
        $produit9->setCategorie($this->getReference('categorie2'));
        $produit9->setDescription("La fraise est le fruit des fraisiers. Elle appartient au genre Fragaria, plante herbacée de la famille des Rosaceae.");
        $produit9->setDisponible('1');
        $produit9->setImage($this->getReference('media11'));
        $produit9->setNom('Fraise');
        $produit9->setPrix('3.75');
        $produit9->setTva($this->getReference('tva1'));
        $manager->persist($produit9);


        $manager->flush();
    }
    
    public function getOrder()
    {
        return 4;
    }
}