/**********************************************************************
 * $Source$
 * $Revision$
 * $Date$
 * $Author$
 *
 * Copyright (c) by Heiner Jostkleigrewe
 * All rights reserved
 * heiner@jverein.de
 * www.jverein.de
 * $Log$
 * Revision 1.3  2008/12/22 21:12:08  jost
 * Icons ins Menü aufgenommen.
 *
 * Revision 1.2  2007/12/02 13:41:04  jost
 * überflüssiges Import-Statement entfernt.
 *
 * Revision 1.1  2007/08/23 19:24:45  jost
 * Bug #11819 - Beitragsgruppen können jetzt gelöscht werden
 *
 **********************************************************************/
package de.jost_net.JVerein.gui.menu;

import de.jost_net.JVerein.JVereinPlugin;
import de.jost_net.JVerein.gui.action.BeitragsgruppeDeleteAction;
import de.willuhn.jameica.gui.parts.CheckedContextMenuItem;
import de.willuhn.jameica.gui.parts.ContextMenu;

/**
 * Kontext-Menu zu den Beitragsgruppen.
 */
public class BeitragsgruppeMenu extends ContextMenu
{

  /**
   * Erzeugt ein Kontext-Menu fuer die Liste der Beitragsgruppen.
   */
  public BeitragsgruppeMenu()
  {
    addItem(new CheckedContextMenuItem(
        JVereinPlugin.getI18n().tr("l�schen..."),
        new BeitragsgruppeDeleteAction(), "user-trash.png"));
  }
}
