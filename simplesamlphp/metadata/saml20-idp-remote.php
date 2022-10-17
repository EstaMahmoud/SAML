<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['https://hia.my.salesforce.com'] = [
    'SingleSignOnService' =>
        array (
            0 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                    'Location' => 'https://hia.my.salesforce.com/idp/endpoint/HttpRedirect',
                ),
        ),
    'SingleLogoutService' =>
        array(
            0=>
                array(
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                    'Location' => 'https://hia.my.salesforce.com/services/auth/idp/saml2/logout',
                ),
        ),
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
    'certificate'          => 'Mahmoud.crt',
    // Add for Digid configuration
//    'ArtifactResolutionService' => array(
//        array(
//            'Location' => 'https://was-preprod1.digid.nl/saml/idp/resolve_artifact',
//            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
//            'index' => 0,
//        ),
//    ),
];