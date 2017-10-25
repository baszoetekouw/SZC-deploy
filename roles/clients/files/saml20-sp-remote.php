<?php
/**
  * SURFnet SCZ Test backend metadata
  **/

$metadata['https://proxy.test.scz.lab.surf.nl/Saml2SP/proxy_saml2_backend.xml'] = array (
  'entityid' => 'https://proxy.test.scz.lab.surf.nl/Saml2SP/proxy_saml2_backend.xml',
  'description' => 
  array (
    'en' => 'SCZ Test SP',
  ),
  'OrganizationName' => 
  array (
    'en' => 'SCZ Test SP',
  ),
  'name' => 
  array (
    'en' => 'SCZ Test SP',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'SCZ Test SP',
  ),
  'url' => 
  array (
    'en' => 'https://meta.test.scz.lab.surf.nl/',
  ),
  'OrganizationURL' => 
  array (
    'en' => 'https://meta.test.scz.lab.surf.nl/',
  ),
  'contacts' => 
  array (
    0 => 
    array (
      'contactType' => 'technical',
      'givenName' => 'Technical',
      'emailAddress' => 
      array (
        0 => 'technical@test.scz.lab.surf.nl',
      ),
    ),
    1 => 
    array (
      'contactType' => 'support',
      'givenName' => 'Support',
      'emailAddress' => 
      array (
        0 => 'support@test.scz.lab.surf.nl',
      ),
    ),
  ),
  'metadata-set' => 'saml20-sp-remote',
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://proxy.test.scz.lab.surf.nl/Saml2SP/acs/post',
      'index' => 1,
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://proxy.test.scz.lab.surf.nl/Saml2SP/acs/redirect',
      'index' => 2,
    ),
  ),
  'SingleLogoutService' => 
  array (
  ),
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDFDCCAfygAwIBAgIJAL30q8piZU1HMA0GCSqGSIb3DQEBCwUAMB8xCzAJBgNV
BAYTAk5MMRAwDgYDVQQDDAdiYWNrZW5kMB4XDTE3MDkxNTEzMjQ0OFoXDTI3MDkx
MzEzMjQ0OFowHzELMAkGA1UEBhMCTkwxEDAOBgNVBAMMB2JhY2tlbmQwggEiMA0G
CSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDZTq/p7+dvDWHtKdLbafSDel8yE+rM
CzCWl0pO1pflmeFS7zwIkN2OxT8Hjvw/apPdxgWxjJE7NXUEWxAHuDde4JbrOY40
/VPg+QSBkNMcENKCMEyKem3Tox8ruZhHbNvs3M5IG2f1Dvx7tU2YZMdcSs6U6PJg
qsFQ+PCM2BWGAEz7Ic6YISWDZsJIDWBE7cw99pMw9UFqK9kmHuKBVnwnjnJaAi1i
EdQitZa8fAF6OBCKRnazxgqX7UWSf+LC4AHfYKuJTZJTaPx52ofvll0ABaTohnmV
uXfILpwUFFXwOPN07iLAF2v+gqBRyhLjV1DxEJk6MMbR+ymMMwMtf6YLAgMBAAGj
UzBRMB0GA1UdDgQWBBQc9/wr+5WKS+JAy3y8m3bLubPWeTAfBgNVHSMEGDAWgBQc
9/wr+5WKS+JAy3y8m3bLubPWeTAPBgNVHRMBAf8EBTADAQH/MA0GCSqGSIb3DQEB
CwUAA4IBAQAZ+MCfjzpzMNEqncBHbD+mw4gWRy28Pj2l8ogrrYvJXzx9L/uPlD2k
8dpjFNDQOWmqYVAKa769L37B6qn4960hXljcWdGKtJOqkTNbtOaAQs2vbd3yOOmf
RoydWqA/fTCZcnx0s+7mha8WZVuCHS3ShvkFVIPFg8NdMx6jj6e8tfvcQ8/R8yU3
jHVpGEDv0QGpDgGUt0zx+G6aGrQVxtNaezuPhCQTdDNmzSU1txSBtLzcW0CJvhJD
8tArwvnU3hMebwsrJ9RIvQQ/AnXPZK0BivjCcuFtek8Z39WtEKTVHXvAoQSkfcnC
XOkAuqSqVGuNtzuvzf28wA9QWGENja2d
',
    ),
  ),
  'validate.authnrequest' => false,
  'saml20.sign.assertion' => true,
);