# Pigeon keeper
## A utility to manage a mailserver's configuration in MySQL

---

**goal:** allow easy adding, editing and removing of *domain names*, *inboxes*, and *aliases*.

**language:** PHP, MySQL

**frameworks:** [Bootstrap](http://getbootstrap.com/)

---

### Navigation
- home
- domains
- inboxes
- aliases
- logoff

Below the navbar, breadcrumbs will be shown if needed.

### Functions
####log in/out
- ``login()``: verifies the supplied username and password
- ``logout()``: destroys the session

#### get stuff
- ``getDomains()``: returns a list of domain names, and their status
- ``getInboxes(INT domainId)``: returns a list of inboxes associated to the given domain
- ``getAliases(INT domainId)``: returns a list of aliases associated to the given domain

#### add stuff
- ``addDomain(STRING domain, BOOL enabled)``: adds a new domain name to the db. Returns an INT with the id if succesfull.
- ``addInbox(INT domainId, STRING address, BOOL enabled)``: adds a new inbox to the db. Returns an INT with the id if succesfull.
- ``addAlias(INT domainId, STRING address, STRING target)``: adds a new alias to the db. Returns an INT with the id if succesfull.

#### edit stuff
// TODO

#### enable/disable stuff
- ``domainEnable(INT domainId, BOOL enabled)``
- ``inboxEnable(INT inboxId, BOOL enabled)``
- ``aliasEnable(INT aliasId, BOOL enabled)``

#### delete stuff
- ``deleteDomain(INT domainId)``
- ``deleteInbox(INT inboxId)``
- ``deleteAlias(INT aliasId)``