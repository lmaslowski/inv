<?php
namespace InvoiceBundle\Entity\Builder;

use InvoiceBundle\Entity\Wrapper\InvoiceWrapperImpl;
class InvoiceWrapperBuilder{

    public static /*InvoiceWrapper*/ function build($invoiceProperties){
        $invoiceBuilder = new InvoiceBuilder($invoiceProperties);
        return new InvoiceWrapperImpl($invoiceBuilder->build());
    }
    
    public static /*InvoiceWrapper*/ function buildWithClient($invoiceProperties, $clientProperties){
        $invoiceBuilder = new InvoiceBuilder($invoiceProperties);
        $clientBuilder = new ClientBuilder($clientProperties);
        $invoiceWrapperImpl =  new InvoiceWrapperImpl($invoiceBuilder->build(), $clientBuilder->build());
        return $invoiceWrapperImpl;
    }
}