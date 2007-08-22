package de.jost_net.JVerein.gui.navigation;

import de.jost_net.JVerein.Einstellungen;
import de.jost_net.JVerein.gui.action.AbbuchungAction;
import de.jost_net.JVerein.gui.action.AuswertungKursteilnehmerAction;
import de.jost_net.JVerein.gui.action.AuswertungMitgliedAction;
import de.jost_net.JVerein.gui.action.KursteilnehmerSucheAction;
import de.jost_net.JVerein.gui.action.ManuellerZahlungseingangListeAction;
import de.jost_net.JVerein.gui.action.MitgliedSucheAction;
import de.jost_net.JVerein.gui.action.StatistikMitgliedAction;
import de.jost_net.JVerein.gui.action.WiedervorlageListeAction;
import de.jost_net.JVerein.gui.action.ZusatzabbuchungListeAction;
import de.willuhn.jameica.gui.NavigationItem;
import de.willuhn.jameica.gui.extension.Extendable;
import de.willuhn.jameica.gui.extension.Extension;
import de.willuhn.logging.Logger;

/**********************************************************************
 * $Source$
 * $Revision$
 * $Date$
 * $Author$
 * $Locker$
 * $State$
 *
 * Copyright (c) by willuhn software & services
 * All rights reserved
 *
 **********************************************************************/

/**
 */
public class MyExtension implements Extension
{

  /**
   * @see de.willuhn.jameica.gui.extension.Extension#extend(de.willuhn.jameica.gui.extension.Extendable)
   */
  public void extend(Extendable extendable)
  {
    try
    {
      NavigationItem jverein = (NavigationItem) extendable;
      jverein.addChild(new MyItem(jverein, "Mitglieder",
          new MitgliedSucheAction()));
      if (Einstellungen.isKursteilnehmer())
      {
        jverein.addChild(new MyItem(jverein, "Kursteilnehmer",
            new KursteilnehmerSucheAction()));
      }
      jverein.addChild(new MyItem(jverein, "Abbuchung", new AbbuchungAction()));
      if (Einstellungen.isZusatzabbuchung())
      {
        jverein.addChild(new MyItem(jverein, "Zusatzabbuchung",
            new ZusatzabbuchungListeAction()));
      }
      jverein.addChild(new MyItem(jverein, "Manueller Zahlungseingang",
          new ManuellerZahlungseingangListeAction()));
      if (Einstellungen.isWiedervorlage())
      {
        jverein.addChild(new MyItem(jverein, "Wiedervorlage",
            new WiedervorlageListeAction()));
      }
      NavigationItem auswertung = null;
      auswertung = new MyItem(auswertung, "Auswertungen", null);
      auswertung.addChild(new MyItem(auswertung, "Mitglieder",
          new AuswertungMitgliedAction()));
      auswertung.addChild(new MyItem(auswertung, "Kursteilnehmer",
          new AuswertungKursteilnehmerAction()));
      auswertung.addChild(new MyItem(auswertung, "Statistik",
          new StatistikMitgliedAction()));
      jverein.addChild(auswertung);
    }
    catch (Exception e)
    {
      Logger.error("unable to extend navigation");
    }

  }

}

/*******************************************************************************
 * $Log$
 ******************************************************************************/
