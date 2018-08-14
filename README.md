# sec-edgar-xblr
Open Source Edgar Filer using XBLR

# About XBLR

XBRL, eXtensible Business Reporting Language, is an XML-based markup language used to
communicate financial and business data electronically. Although XBRL is based on XML, XBRL
software is generally user-friendly, requiring no previous knowledge of XML and no IT background.
Any entity can use XBRL to encode its financial information such as financial statements, earnings
releases, and so forth. In simple terms, XBRL is a tool that benefits all users of financial statements by
providing increased functionality over traditional paper, Hyper Text Markup Language (HTML), and
other image-based financial reporting formats.

XBRL is used to encode financial statements so that the information in those statements can be read
automatically by XBRL-enabled software and more easily sorted and compared. Computers have no
inherent knowledge of financial reporting and do not understand information that is not fully defined.
Making information machine-readable requires data to be accompanied by contextual information.
Consider the example in Figure 1. Telling a computer ?our net sales were 131,383 is useless without
defining what the number represents (net sales), the currency in which it is reported (dollars), scaling
and rounding (thousands), time period covered (2013), and the company identity (ABC Company).
This accompanying context allows a computer to make sense of ?131,383. The markup codes used in
XBRL describe financial data in a format that computers can classify, sort, and analyze.

# Filing XBLR Format
The technical specifications are located at https://www.sec.gov/oit/Article/info-edgar-tech-specs.html

Final
* EDGAR Filer Manual  (UPDATED 07/09/18)
* ABS XML Technical Specification (Version 1.7) (UPDATED 07/17/17)
* EDGARLink Online XML Technical Specification (Version 25)  (UPDATED 07/09/18)
* EDGARLink™ Rel 9.0 and NSAR Rel 6.1a Software
* Form 13F XML Technical Specification (Version 1.3) (UPDATED 12/12/16)
* Form 17-H XML Technical Specification (Version 1.1) (UPDATED 07/17/17)
* Form C XML Technical Specification (Version 3)  (UPDATED 07/09/18)
* Form CFPORTAL XML Technical Specification (Version 1.2) (UPDATED 07/17/17)
* Form D XML Technical Specifications (Version 10)  (UPDATED 07/09/18)
* Form MA XML Technical Specification (Version 1) (UPDATED 12/12/16)
* Form N-CEN XML Technical Specification (Version 2.1)  (UPDATED 03/12/18)
* Form N-MFP1 XML Technical Specification (Version 1.2) (UPDATED 08/17/16)
* Form N-MFP2 XML Technical Specification (Version 2.0) (UPDATED 03/13/17)
* Form N-PORT XML Technical Specification (Version 1.3) (UPDATED 03/12/18)
* Form SDR XML Technical Specification (Version 3) (UPDATED 09/14/15)
* Form TA XML Technical Specification (Version 1.3)  (UPDATED 07/09/18)
* Form X-17A-5 XML Technical Specification (Version 3.0) (UPDATED 03/13/17)
* Ownership XML Technical Specifications Document (Version 5.1) (UPDATED 09/14/15)
* Reg A XML Technical Specification (Version 1.4) (UPDATED 03/13/17)
* SBS Entity Forms XML Technical Specification (Version 1) (UPDATED 04/25/16)
* Standard Industrial Classification (SIC) Codes
* XSLT Stylesheets for HTML Rendering of EDGAR XML Filings
* EDGAR Dissemination System

Draft
For more information visit http://xbrl.sec.gov 
* DRAFT Taxonomies
* EDGAR Standard Taxonomies
* EDGAR XBRL Validation Errors and Warnings
* Interactive Data Test Suite
* Preview Interactive Data Submissions

## When
Quarterly report on Form 10-Q or annual report on Form 20-F or Form 40-F containing financial statements for a fiscal period ending on or after June 15, 2011.

## Who 
All remaining filers using US GAAP, including smaller reporting companies, and all foreign private issuers that prepare their financial statements in accordance with IFRS as issued by the ISAB.

# EDGAR Filer Manual
Updates to the manual can be found at https://www.sec.gov/info/edgar/edmanuals.htm

# The Securities Exchange Act of 1934
Section 12 begins on page 111 through page 121 of the attached PDF

## Paragraph (b) - page 111
Outlines the minimum requirements to file the offering statement, if you do not meet the minimums, you can still file as voluntary.
* (b) A security may be registered on a national securities exchange
by the issuer filing an application with the exchange (and
filing with the Commission such duplicate originals thereof as the
Commission may require), which application shall contain—
** (1) Such information, in such detail, as to the issuer and
any person directly or indirectly controlling or controlled by, or
under direct or indirect common control with, the issuer, and
any guarantor of the security as to principal or interest or
both, as the Commission may by rules and regulations require,
as necessary or appropriate in the public interest or for the
protection of investors, in respect of the following: 28
*** (A) the organization, financial structures, and nature
of the business;
*** (B) the terms, position, rights, and privileges of the
different classes of securities outstanding;
*** (C) the terms on which their securities are to be, and
during the preceding three years have been, offered to the
public or otherwise;
*** (D) the directors, officers, and underwriters, and each
security holder of record holding more than 10 per centum
of any class of any equity security of the issuer (other than
an exempted security), their remuneration and their interests
in the securities of, and their material contracts with,
the issuer and any person directly or indirectly controlling
or controlled by, or under direct or indirect common control
with, the issuer;
*** (E) remuneration to others than directors and officers
exceeding $20,000 per annum;
*** (F) bonus and profit-sharing arrangements;
*** (G) management and service contracts;
*** (H) options existing or to be created in respect of their
securities;
*** (I) material contracts, not made in the ordinary course
of business, which are to be executed in whole or in part
at or after the filing of the application or which were made
not more than two years before such filing, and every material
patent or contract for a material patent right shall
be deemed a material contract;
*** (J) balance sheets for not more than the three preceding
fiscal years, certified if required by the rules and
regulations of the Commission by a registered public accounting
firm;
*** (K) profit and loss statements for not more than the
three preceding fiscal years, certified if required by the
rules and regulations of the Commission by a registered
public accounting firm; and
*** (L) any further financial statements which the Commission
may deem necessary or appropriate for the protection
of investors.
** (2) Such copies of articles of incorporation, bylaws, trust
indentures, or corresponding documents by whatever name
known, underwriting arrangements, and other similar documents
of, and voting trust agreements with respect to, the
issuer and any person directly or indirectly controlling or controlled
by, or under direct or indirect common control with, the
issuer as the Commission may require as necessary or appropriate
for the proper protection of investors and to insure fair
dealing in the security.
** (3) Such copies of material contracts, referred to in paragraph
(1)(I) above, as the Commission may require as necessary
or appropriate for the proper protection of investors and
to insure fair dealing in the security.

## Paragraph (g) - page 116
This section refers to interstate of large issuers, which includes internet solicitation.
* (g)(1) Every issuer which is engaged in interstate commerce, or
in a business affecting interstate commerce, or whose securities are
traded by use of the mails or any means or instrumentality of
interstate commerce shall—
** (A) within 120 days after the last day of its first fiscal year
ended on which the issuer has total assets exceeding
$10,000,000 and a class of equity security (other than an exempted
security) held of record by either—
*** (i) 29 2,000 persons, or
*** (ii) 500 persons who are not accredited investors (as such
term is defined by the Commission), and
** (B) in the case of an issuer that is a bank, a savings and
loan holding company (as defined in section 10 of the Home
Owners’ Loan Act), or a bank holding company, as such term
is defined in section 2 of the Bank Holding Company Act of
1956 (12 U.S.C. 1841), not later than 120 days after the last
day of its first fiscal year ended after the effective date of this
subsection, on which the issuer has total assets exceeding
$10,000,000 and a class of equity security (other than an exempted
security) held of record by 2,000 or more persons,
register such security by filing with the Commission a registration
statement (and such copies thereof as the Commission may require)
with respect to such security containing such information and documents
as the Commission may specify comparable to that which is
required in an application to register a security pursuant to subsection
(b) of this section. Each such registration statement shall
become effective sixty days after filing with the Commission or
within such shorter period as the Commission may direct. Until
such registration statement becomes effective it shall not be
deemed filed for the purposes of section 18 of this title. Any issuer
may register any class of equity security not required to be registered
by filing a registration statement pursuant to the provisions
of this paragraph. The Commission is authorized to extend the date
upon which any issuer or class of issuers is required to register a
security pursuant to the provisions of this paragraph.



