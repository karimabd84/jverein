/**********************************************************************
 * $Source$
 * $Revision$
 * $Date$
 * $Author$
 *
 * Copyright (c) by Heiner Jostkleigrewe
 * All rights reserved
 * jost@berlios.de
 * jverein.berlios.de
 * $Log$
 **********************************************************************/
package de.jost_net.JVerein.gui.view;

import de.jost_net.JVerein.gui.action.BackAction;
import de.jost_net.JVerein.gui.control.BuchungsuebernahmeControl;
import de.willuhn.jameica.gui.AbstractView;
import de.willuhn.jameica.gui.GUI;
import de.willuhn.jameica.gui.util.ButtonArea;
import de.willuhn.util.ApplicationException;

public class BuchungsUebernahmeView extends AbstractView
{
  public void bind() throws Exception
  {
    GUI.getView().setTitle("Buchungen aus Hibiscus �bernehmen");

    final BuchungsuebernahmeControl control = new BuchungsuebernahmeControl(
        this);

    ButtonArea buttons = new ButtonArea(this.getParent(), 2);
    buttons.addButton(control.getStartButton());
    buttons.addButton("<< Zur�ck", new BackAction());
  }

  public void unbind() throws ApplicationException
  {
  }
}
