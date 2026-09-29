# Xero Tweaks (au.com.agileware.xerotweaks)

This is a small [CiviCRM](https://civicrm.org) extension that adjusts the data
[CiviXero](https://github.com/eileenmcnaughton/nz.co.fuzion.civixero) pushes to
[Xero](https://www.xero.com), so that Contacts, Invoices and Invoice Line Items appear in Xero the
way Agileware clients typically want them, rather than with CiviXero's default formatting. It does
this by implementing CiviXero's `accountPushAlterMapped` hook, so it requires no configuration of
its own, it simply changes the data on the way out once installed.

Specifically, it:

* Removes the Contact ID from the Contact's Xero name, so the Xero Contact Name is just the
  CiviCRM Display Name.
* Adds the CiviCRM "Supplemental Address 1/2/3" fields as additional Xero address lines.
* Replaces the Xero Invoice Reference with the Contribution Source (if one is set), instead of
  CiviXero's default reference.
* Replaces each Invoice Line Item's description with just the CiviCRM line item label, instead of
  CiviXero's default line item description.

The extension is licensed [AGPL-3.0](LICENSE.txt).

## Usage

There is no user-facing UI, settings page, or scheduled job. Once the extension is installed and
enabled alongside CiviXero (and CiviXero is configured and connected to a Xero organisation as
normal), the tweaks above are applied automatically every time CiviXero pushes Contacts or Invoices
to Xero. There is nothing further for a CiviCRM user to configure or operate day-to-day.

## Special configuration requirements

None. This extension does not add any settings pages, permissions, or scheduled jobs. It only
requires that the [CiviXero extension](https://github.com/eileenmcnaughton/nz.co.fuzion.civixero)
is installed and enabled, since it hooks into CiviXero's account push process. Simply enabling
Xero Tweaks is sufficient for the above changes to take effect the next time CiviXero pushes data
to Xero.

## Requirements

* PHP v5.6+
* [CiviCRM 5.51+](https://civicrm.org/download)
* [CiviXero extension](https://github.com/eileenmcnaughton/nz.co.fuzion.civixero)

## Installation (Web UI)

Learn more about installing CiviCRM extensions in the [CiviCRM Sysadmin
Guide](https://docs.civicrm.org/sysadmin/en/latest/customize/extensions/).

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl au.com.agileware.xerotweaks@https://github.com/agileware/au.com.agileware.xerotweaks/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/agileware/au.com.agileware.xerotweaks.git
cv en xerotweaks
```

## About the Authors

This CiviCRM extension was developed by the team at [Agileware](https://agileware.com.au).

[Agileware](https://agileware.com.au) provide a range of CiviCRM services including:

  * CiviCRM migration
  * CiviCRM integration
  * CiviCRM extension development
  * CiviCRM support
  * CiviCRM hosting
  * CiviCRM remote training services

Support your Australian [CiviCRM](https://civicrm.org) developers, [contact Agileware](https://agileware.com.au/contact) today!

![Agileware](logo/agileware-logo.png)
