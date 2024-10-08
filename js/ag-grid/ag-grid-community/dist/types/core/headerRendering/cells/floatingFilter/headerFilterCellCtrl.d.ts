import type { BeanCollection } from '../../../context/context';
import type { AgColumn } from '../../../entities/agColumn';
import type { HeaderRowCtrl } from '../../row/headerRowCtrl';
import { AbstractHeaderCellCtrl } from '../abstractCell/abstractHeaderCellCtrl';
import type { IHeaderFilterCellComp } from './iHeaderFilterCellComp';
export declare class HeaderFilterCellCtrl extends AbstractHeaderCellCtrl<IHeaderFilterCellComp, AgColumn> {
    private eButtonShowMainFilter;
    private eFloatingFilterBody;
    private suppressFilterButton;
    private highlightFilterButtonWhenActive;
    private active;
    private iconCreated;
    private userCompDetails?;
    private destroySyncListener;
    private destroyFilterChangedListener;
    constructor(column: AgColumn, beans: BeanCollection, parentRowCtrl: HeaderRowCtrl);
    setComp(comp: IHeaderFilterCellComp, eGui: HTMLElement, eButtonShowMainFilter: HTMLElement, eFloatingFilterBody: HTMLElement): void;
    protected resizeHeader(): void;
    protected moveHeader(): void;
    private setupActive;
    private setupUi;
    private setupFocus;
    private setupAria;
    private onTabKeyDown;
    private findNextColumnWithFloatingFilter;
    protected handleKeyDown(e: KeyboardEvent): void;
    private onFocusIn;
    private setupHover;
    private setupLeft;
    private setupFilterButton;
    private setupUserComp;
    private setCompDetails;
    private showParentFilter;
    private setupSyncWithFilter;
    private setupWidth;
    private setupFilterChangedListener;
    private updateFilterButton;
    private onColDefChanged;
    private updateCompDetails;
    private updateFloatingFilterParams;
    destroy(): void;
}
